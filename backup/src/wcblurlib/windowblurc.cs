using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Runtime.InteropServices;
namespace wcblurlib
{
    [StructLayout(LayoutKind.Sequential)]
    internal struct windowCompositionAttributeData
    {
        public windowCompositionAttribute Attribute;
        public IntPtr Data;
        public int SizeOfData;
    }
    public enum accentState
    {
        ACCENT_DISABLED = 0,
        ACCENT_ENABLE_GRADIENT = 1,
        ACCENT_ENABLE_TRANSPARENT_GRADIENT = 2,
        ACCENT_ENABLE_BLURBEHIND = 3,
        ACCENT_ENABLE_ACRYLICBLURBEHIND = 4,
        ACCENT_INVALID_STATE = 5,
    }
    [StructLayout(LayoutKind.Sequential)]
    internal struct accentPolicy
    {
        public accentState AccentState;
        public uint AccentFlags;
        public uint GradientColor;
        public uint AnimationId;
    }
    internal enum windowCompositionAttribute { WCA_ACCENT_POLICY = 19 }
    public class windowblurc
    {
        [DllImport("user32.dll")]
        internal static extern int SetWindowCompositionAttribute(IntPtr hwnd, ref windowCompositionAttributeData data);
        public void enableBlurBackground(IntPtr windowOrFormHandle, accentState acst = accentState.ACCENT_ENABLE_BLURBEHIND)
        {
            var accent = new accentPolicy();
            accent.AccentState = acst;
            var accentStructSize = Marshal.SizeOf(accent);
            var accentPtr = Marshal.AllocHGlobal(accentStructSize);
            Marshal.StructureToPtr(accent, accentPtr, false);
            var data = new windowCompositionAttributeData();
            data.Attribute = windowCompositionAttribute.WCA_ACCENT_POLICY;
            data.SizeOfData = accentStructSize;
            data.Data = accentPtr;
            SetWindowCompositionAttribute(windowOrFormHandle, ref data);
            Marshal.FreeHGlobal(accentPtr);
        }
        public windowblurc(IntPtr wofhandle)
        {
            enableBlurBackground(wofhandle);
        }
    }
}
